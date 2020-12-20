export default {
    getUsers: async (page, params) => await axios.get(`/api/users/get_paginate?page=${page}`, {params})
}
