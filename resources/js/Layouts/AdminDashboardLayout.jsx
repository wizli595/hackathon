import { Head } from '@inertiajs/react'
import React from 'react'

function AdminDashboardLayout({ children }) {
    return (
        <div className='flex'>
            <Head title="Dashboard" />
            <div className="sidebar w-[400px] m-2 p-4 h-full bg-blue-400">
                <p>Dashboard</p>
                <p>Teachers</p>
                <p>Students</p>
            </div>
            <div className='main w-[100%] h-full'>
                {children}
            </div>
        </div>
    )
}

export default AdminDashboardLayout