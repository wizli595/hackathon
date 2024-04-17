import { Card } from 'primereact/card';
import { Head } from '@inertiajs/react'
import React from 'react'
const student = {
    id: 1,
    name: "Ashish",
    email: "<EMAIL>",
    stack: "FS",
    totalRepos: 10,
    projects: [
        {
            id: 1,
            name: "Project 1",
            description: "This is a project",
            note: 20
        },
        {
            id: 2,
            name: "Project 2",
            description: "This is a project",
            note: 18
        }
    ]
}
function Profile() {
    return (
        <>
            <Head title="Profile" />
            <div className='flex gap-2 p-4'>
                <div className=' w-[20%] h-screen bg-slate-500 rounded-md px-4'>
                    <div className='flex text-xl h-[20vh] p-4 justify-center'>
                        <img class="w-[17vh] h-fit p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="https://img.freepik.com/free-photo/happy-arab-woman-hijab-portrait-smiling-girl-posing-red-studio-background-young-emotional-woman-human-emotions-facial-expression-concept-front-view_155003-22795.jpg?t=st=1713356248~exp=1713359848~hmac=9780745be0e9c9e193bd3002acc7f20e870c6643c8262e4e8f95ffb78e6cfcd9&w=996" alt="Bordered avatar" />
                    </div>
                    <div className='flex text-xl '>
                        Name : <p className='text-center text-white text-xl font-semibold ml-2'> {student.name}</p>
                    </div>
                    <div className='flex text-xl '>
                        Email : <p className='text-center text-white text-xl font-semibold ml-2'> {student.email}</p>
                    </div>
                    <div className='flex text-xl '>
                        Repos : <p className='text-center text-white text-xl font-semibold ml-2'> {student.totalRepos}</p>
                    </div>
                </div>
                <div>
                    <form onSubmit={handelSubmit}>

                    </form>
                </div>
                <div className=' w-[78%] h-screen bg-orange-100 rounded-md flex gap-4 p-4'>
                    {student.projects.map(p => (
                        <div className="card" key={p.id}>
                            <Card title="Simple Card">
                                <p className="m-0">
                                    {p.name}
                                    {p.description}
                                    {p.note}
                                </p>
                            </Card>
                        </div>
                    ))}
                </div>
            </div>
        </>
    )
}

export default Profile