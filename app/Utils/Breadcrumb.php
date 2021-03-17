<?php

namespace App\Utils;

use Exception;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Symfony\Component\Yaml\Yaml;

/**
 * パンくずを生成するクラス
 *
 * Class Breadcrumb
 * @package App\Utils
 */
class Breadcrumb
{
    /** @var self */
    public static $instance;

    /** @var string */
    private $template;

    /** @var array|null */
    private $data;

    /**
     * Breadcrumb constructor.
     * @param string $template
     */
    private function __construct(string $template)
    {
        $this->template = $template;
        $this->data = Yaml::parse(file_get_contents(resource_path(config('breadcrumbs.file'))));
    }

    /**
     * singleton
     * @param string $template
     * @return static
     */
    public static function instance(string $template): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($template);
        }

        return self::$instance;
    }

    /**
     * @param string $template
     * @param array $params
     * @return View
     * @throws Exception
     */
    public static function current(string $template = '', array $params = []): View
    {
        $instance = self::instance($template);

        return $instance->generateHtml(Route::currentRouteName(), $params);
    }

    /**
     * HTML出力
     * @param string $name
     * @param array $params
     * @return View
     * @throws Exception
     */
    private function generateHtml(string $name, array $params): View
    {
        $pages = $this->breadcrumbData($name, $params);

        // パンくずが設定されていない場合、エラー表示
        if (empty($pages)) throw new Exception('現在のページにパンくずが設定されていません。');

        return view($this->template, compact('pages'));
    }

    /**
     * パンくずリストの生成
     * @param string $name
     * @param array $params
     * @return array|null
     * @throws Exception
     */
    private function breadcrumbData(string $name, array $params): ?array
    {
        $results = [];

        while ($data = $this->getBreadcrumbsByName($name)) {
            $results[] = array_merge($data, [
                'url' => $this->generateUrl($name, $params)
            ]);

            $name = Arr::get($data, 'parent');

            if (is_null(Arr::get($data, 'parent'))) break;
        }

        return array_reverse($results);
    }

    /**
     * 対象のパンくずを取得
     * @param string $name
     * @return array
     */
    private function getBreadcrumbsByName(string $name): ?array
    {
        return Arr::get($this->data, $name);
    }

    /**
     * url生成
     * @param string $name
     * @param array $params
     * @return string
     * @throws Exception
     */
    private function generateUrl(string $name, array $params): string
    {
        return url(Arr::get(parse_url(route($name, $params)), 'path'));
    }

    /**
     * ルーティングに対応するページタイトルを取得
     * @param string|null $routeName
     * @return string
     */
    public static function getPageTitle(string $routeName = null): string
    {
        if (is_null($routeName)) {
            $routeName = request()->route()->getName();
        }

        $breadcrumb = Arr::get(Yaml::parse(file_get_contents(resource_path(config('breadcrumbs.file')))), $routeName);

        return Arr::get($breadcrumb, 'title');
    }
}
