<template>
    <div>
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
                    <a class="page-link" @click="getUsers(page)">{{ page }}</a>
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
            pages: []
        }
    },
    created() {
        this.getUsers(1)
    },
    methods: {
        getUsers(page) {
            api.getUsers(page)
                .then(response => {
                    this.paginate = response.data.users
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
