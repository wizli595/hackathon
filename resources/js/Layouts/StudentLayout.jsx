import { Head } from '@inertiajs/react'
import React from 'react'

function StudentLayout({ children }) {
    return (
        <div className='flex'>
            <Head title="Dashboard" />
            <div className="sidebar w-[400px] m-2 p-4 h-full bg-red-400">
                <p>User Infos</p>
                <p>Name</p>
                <p>Email</p>
            </div>
            <div className='main w-[100%] h-full'>
                {children}
            </div>
        </div>
    )
}

export default StudentLayout