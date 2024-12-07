import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Index({projects}) {
     console.log(projects);
    // const projects = props.projects;
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Projects
                </h2>
            }
        >
            <Head title="Projects" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                                <table>
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </thead>
                                    <tbody>
                                        {projects.map((project) => (
                                            <tr key={project.id_project}>
                                                <td>{project.id_project}</td>
                                                <td>{project.project_name}</td>
                                                <td>{project.project_description}</td>
                                            </tr>
                                        ))}
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div>
                        <a href={route('projects.create')} className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Project</a>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
