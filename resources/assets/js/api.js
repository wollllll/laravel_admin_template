export default {
    getUsers: async (url, page, params) => await axios.get(`${url}?page=${page}`, {params})
}
