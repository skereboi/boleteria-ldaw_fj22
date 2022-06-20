/* eslint-disable camelcase */
import Axios from 'axios'
import globalConfig from '../config'

export const categoryService = {
  getAllCategories: async () => {
    const { data } = await Axios.get(`${globalConfig.url}/api/categories/`)
    console.log(data)
    return data
  },
  getOneCategory: async (id) => {
    const { data } = await Axios.get(`${globalConfig.url}/api/categories/${id}`)
    return data
  },
  updateOneCategory: async (id, category) => {
    const { data } = await Axios.put(`${globalConfig.url}/api/categories/${id}`, category)
    return data
  },
  createOneCategory: async (category) => {
    const { data } = await Axios.post(`${globalConfig.url}/api/categories`, category)
    return data
  },
  deleteOneCategory: async (id) => {
    const { data } = await Axios.delete(`${globalConfig.url}/api/categories/${id}`)
    return data
  }

}
