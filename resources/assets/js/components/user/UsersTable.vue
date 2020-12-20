<template>
    <div>
        <div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="name">名前</label>
                    <input v-model="params.name" id="name" class="form-control" name="name">
                </div>
                <div class="col-6 form-group">
                    <label for="email">メールアドレス</label>
                    <input v-model="params.email" id="email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group text-center">
                <button type="button" class="btn btn-primary" @click="searchUsers(1, params)">
                    検索&nbsp;
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>作成日時</th>
            </tr>
            </thead>
            <tbody>
            <tr :key="user.id" v-for="user in paginate.data">
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.created_at }}</td>
            </tr>
            </tbody>
        </table>
        <nav>
            <ul class="pagination">
                <li :class="isActive(page)" class="page-item" v-for="page in getPages">
                    <a class="page-link" @click="getUsers(page, params)">{{ page }}</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
import api from "../../api";

export default {
    data() {
        return {
            paginate: {},
            pages: [],
            params: {
                name: null,
                email: null
            }
        }
    },
    created() {
        this.getUsers(1, this.params)
    },
    methods: {
        getUsers(page, params) {
            api.getUsers(page, params)
                .then(response => {
                    this.paginate = response.data.users
                })
        },
        searchUsers(page, params) {
            this.getUsers(page, params);
            this.$nextTick(() => {
                this.params.name = null;
                this.params.email = null;
            })
        },
        isActive(page) {
            return page === this.paginate.current_page ? 'active' : ''
        }
    },
    computed: {
        getPages() {
            let start = _.max([this.paginate.current_page - 2, 1])
            let end = _.min([start + 10, this.paginate.last_page + 1])
            start = _.max([end - 10, 1])
            return _.range(start, end)
        }
    }
}
</script>

<style lang="scss">
.page-item {
    cursor: pointer;
}
</style>
