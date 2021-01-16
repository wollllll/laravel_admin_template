<template>
    <div>
        <form @submit.prevent>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="name">名前</label>
                    <input v-model="params.name" id="name" class="form-control" name="name">
                </div>
                <div class="col-4 form-group">
                    <label for="email">メールアドレス</label>
                    <input v-model="params.email" id="email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" @click="getUsers(initialPage)">
                    検索&nbsp;
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
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
            <tr :key="user.id" v-for="user in users.data">
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
                    <a class="page-link" @click="getUsers(page)">{{ page }}</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
import api from "../../api";

export default {
    props: {
        firstPageUsers: Object,
        actionUrl: String
    },
    data() {
        return {
            users: {},
            initialPage: 1,
            pages: [],
            params: {
                name: '',
                email: ''
            },
        }
    },
    created() {
        this.users = this.firstPageUsers;
    },
    methods: {
        getUsers(page) {
            api.getUsers(this.actionUrl, page, this.params)
                .then(response => {
                    this.users = response.data.users
                })
        },
        isActive(page) {
            return page === this.users.current_page ? 'active' : ''
        }
    },
    computed: {
        getPages() {
            let start = _.max([this.users.current_page - 2, 1])
            let end = _.min([start + 10, this.users.last_page + 1])
            start = _.max([end - 10, 1])
            return _.range(start, end)
        }
    }
}
</script>
