<?php
/**
 * URLに関連する処理を記載してください。
 *
 * 例として以下のような処理
 * ・URLを生成
 * ・URLを用いた判定
 * ・Laravelのヘルパで賄えないURL関連の拡張ヘルパ
 */

if (!function_exists('vasset')) {

    /**
     * assetのversion付与ラッパー
     * localの場合と、server側でfastcgiが設定されていない場合は、assetと同様の挙動
     *
     * @param $path
     * @param null $secure
     * @return string
     */
    function vasset($path, $secure = null)
    {
        $version = config('cache.deploy_version');

        if (config('app.env') === 'local') return asset($path, $secure) . sprintf('?v=%s', now()->format('YmdHis'));
        if (empty($version)) return asset($path, $secure) . sprintf('?v=%s', now()->format('YmdHis'));

        return asset($path, $secure) . sprintf('?v=%s', $version);
    }
}
