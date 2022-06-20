/* eslint-disable no-unused-vars */
import React from 'react'
import { Route, Routes, BrowserRouter } from 'react-router-dom'
import { GeneralProvider } from './context/general.context'
import { TablesInfo } from './pages/Events/TablesInfo'
import { initAxiosInterceptors } from './services/auth.service'
initAxiosInterceptors()

// eslint-disable-next-line react/display-name
export default () => (
  <GeneralProvider>
        <App/>
  </GeneralProvider>
)
const App = () => {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/'>
          {/* Public routes */}
            <Route path='table-info' element={<TablesInfo />} />
        </Route>
      </Routes>
    </BrowserRouter>
  )
}
