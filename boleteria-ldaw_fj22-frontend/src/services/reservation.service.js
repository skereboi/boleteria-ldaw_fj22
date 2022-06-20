/* eslint-disable camelcase */
import Axios from 'axios'
import globalConfig from '../config'

export const reservationService = {
  getAllReservations: async () => {
    const { data } = await Axios.get(`${globalConfig.url}/api/reservations`)
    return data
  },
  getReservationQrByIdEventIdUser: async (id_evento) => {
    const { data } = await Axios.get(`${globalConfig.url}/api/eventos/${id_evento}/qr`)
    return data
  },
  getAllReservationsById: async () => {
    const { data } = await Axios.get(`${globalConfig.url}/api/usuarios/reservaciones`)
    return data
  }
}
