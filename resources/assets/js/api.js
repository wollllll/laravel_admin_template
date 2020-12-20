export default {
    getUsers: async (page) => await axios.get(`/api/users/get_paginate?page=${page}`)
}
