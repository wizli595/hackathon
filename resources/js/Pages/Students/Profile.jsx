import { Card } from 'primereact/card';
import { Head } from '@inertiajs/react'
import React, { useState } from 'react'
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
    const [show, setShow] = useState(false)
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
                <div className=' w-[78%] h-screen bg-orange-100 rounded-md flex gap-4 p-4 relative'>
                    {student.projects.map(p => (
                        <div className="card" key={p.id}>
                            <Card title={p.name}>
                                <p className="m-0">
                                    <span className=' font-semibold'>Description :</span>  {p.description}
                                </p>
                                <p>
                                    <span className=' font-semibold'>Note :</span> {p.note}
                                </p>
                            </Card>
                        </div>
                    ))}
                </div>
                <button onClick={() => { setShow(true) }} className=' absolute top-8 right-14 bg-blue-500 px-4 py-1 rounded-md text-white '>Add +</button>
                {show &&
                    <div className='absolute h-screen w-full flex justify-center items-center'>
                        <form class="max-w-sm mx-auto" className='w-[300px] bg-white rounded-xl shadow-md flex flex-col gap-4 p-4  relative'>
                            <button className=' bg-red-600 text-white py-2 px-4 absolute top-[-3em] right-[-3em] rounded-full' onClick={() => { setShow(fasle) }}>X</button>
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your repo name :</label>
                                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="repo name" />
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                        </form>
                    </div>
                }
            </div>
        </>
    )
}

export default Profile