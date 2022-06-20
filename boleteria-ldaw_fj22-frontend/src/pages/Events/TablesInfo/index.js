
import React, { useEffect, useState } from 'react'
import { useAuth } from '../../../hooks/useAuth'
import { categoryService } from '../../../services/category.service'
import { eventService } from '../../../services/event.service'
import { reservationService } from '../../../services/reservation.service'
import './style.scss'

export const TablesInfo = () => {
  // Estados
  const [categories, setCategories] = useState([])
  const [events, setEvents] = useState([])
  const [reservations, setReservations] = useState([])

  // hooks
  const { user } = useAuth()

  // Efectos
  useEffect(() => {
    const getCategories = async () => {
      try {
        // Esperar a resolver la peticion para avanzar
        const dbCateogires = await categoryService.getAllCategories()
        setCategories(dbCateogires)
      } catch (error) {
        console.log(error)
      }
    }
    const getEvents = async () => {
      try {
        // Esperar a resolver la peticion para avanzar
        const dbEvents = await eventService.getAllEvents()
        setEvents(dbEvents)
      } catch (error) {
        console.log(error)
      }
    }

    const getReservations = async () => {
      try {
        // Esperar a resolver la peticion para avanzar
        const dbReservations = await reservationService.getAllReservations()
        setReservations(dbReservations)
      } catch (error) {
        console.log(error)
      }
    }

    getEvents()
    getReservations()
    getCategories()
  }, [])

  // Estados
  return (
    <>

        {/* Page content */}
        <section className="container event-discover">
        <div className="container">
        <div className="row">
          <div className="col-sm-12">
          <h2>Categorias</h2>
          </div>
        </div>
        </div>
        <div className="row">
        <div className="col-sm-12">
          <table id="productTable"
                className="table table-bordered
                        table-condensed table-striped">
            <thead>
              <tr>
                <th>ID Categoria</th>
                <th>Nombre</th>
                <th>Activo</th>
              </tr>
            </thead>
            <tbody>
              {
              categories.map(category => (<InfoOption key={category.id} {...category} />))
              }</tbody>
          </table>
          <br/>
          </div>
          </div>
          <div className="container">
        <div className="row">
          <div className="col-sm-12">
          <h2>Eventos</h2>
          </div>
        </div>
        </div>
        <div className="row">
        <div className="col-sm-12">
          <table id="productTable"
                className="table table-bordered
                        table-condensed table-striped">
            <thead>
              <tr>
                <th>ID Evento</th>
                <th>Nombre</th>
                <th>Activo</th>
              </tr>
            </thead>
            <tbody>
              {
              events.map(event => (<InfoOption key={event.id} {...event} />))
              }</tbody>
          </table>
          <br/>
          </div>
          </div>
          <div className="container">
        <div className="row">
          <div className="col-sm-6">
          <h2>Reservaciones</h2>
          </div>
        </div>
        </div>
        <div className="row">
        <div className="col-sm-12">
          <table id="productTable"
                className="table table-bordered
                        table-condensed table-striped">
            <thead>
              <tr>
                <th>ID User</th>
                <th>ID Event</th>
                <th>Qr Code</th>
              </tr>
            </thead>
            <tbody>
              {
              reservations.map(reservation => (<ReservationOption key={reservation.id} {...reservation} />))
              }</tbody>
          </table>
          <br/>
          </div>
          </div>

        </section>
    </>
  )
}
const InfoOption = (props) => {
  return (
    <tr>
                <th>{props.id}</th>
                <th>{props.name}</th>
                <th>{props.active} </th>
              </tr>
  )
}
const ReservationOption = (props) => {
  return (
    <tr>
                <th>{props.user_id}</th>
                <th>{props.event_id}</th>
                <th>{props.qr_code} </th>
              </tr>
  )
}
