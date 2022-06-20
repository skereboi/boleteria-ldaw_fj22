import React from 'react'
import { Link } from 'react-router-dom'
import { data } from '../../../data'
import { useAuth } from '../../../hooks/useAuth'

export const AccounteMenu = () => {
  const { user, logout } = useAuth()
  return (
    <aside className="col-lg-3 col-md-4 border-end pb-5 mt-n5">
      <div className="position-sticky top-0">
        <div className="text-center pt-5">
          <div className="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
            <b>Usuario</b>
          </div>
          <h2 className="h5 mb-1">
            {user.nombre}
          </h2>
          <p className="mb-3 pb-3">{user.email}</p>
          <button type="button" className="btn btn-secondary w-100 d-md-none mt-n2 mb-3" data-bs-toggle="collapse" data-bs-target="#account-menu">
            <i className="bx bxs-user-detail fs-xl me-2" />
            {data.menuAccount[user.typeUser].title}
            <i className="bx bx-chevron-down fs-lg ms-1" />
          </button>
          <div id="account-menu" className="list-group list-group-flush collapse d-md-block">
            {
              data.menuAccount[user.typeUser].options.map(option => (<MenuOptionAccount key={option.id} {...option} />))
            }

            <button onClick={() => logout()} className="list-group-item list-group-item-action d-flex align-items-center">
              <i className="bx bx-log-out fs-xl opacity-60 me-2" />
              Cerrar sesión
            </button>
          </div>
        </div>
      </div>
    </aside>
  )
}
const MenuOptionAccount = (props) => {
  const { pathname, icon, title } = props

  return (
    <Link to={pathname} className="list-group-item list-group-item-action d-flex align-items-center ">
      <i className={`${icon} fs-xl opacity-60 me-2`} />
      {title}
    </Link>
  )
}
