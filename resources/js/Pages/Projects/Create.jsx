import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import ColorInput from "@/Components/ColorInput";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, useForm } from "@inertiajs/react";

export default function Create({}) {
    const { data, setData, post, processing, errors, reset } = useForm({
        project_name: "",
        project_description: "",
        project_color: "#00FF00",
    });

    const submit = (e) => {
        e.preventDefault();

        post(route('projects.store'), {
            onFinish: () => reset('project_name', 'project_description'),
        });
    };

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Create a new project
                </h2>
            }
        >
            <Head title="Create a new project" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            <form onSubmit={submit}>
                                <div>
                                    <InputLabel
                                        htmlFor="project_name"
                                        value="project Name"
                                    />

                                    <TextInput
                                        id="project_name"
                                        name="project_name"
                                        value={data.project_name}
                                        className="mt-1 block w-full"
                                        autoComplete="project_name"
                                        isFocused={true}
                                        onChange={(e) =>
                                            setData(
                                                "project_name",
                                                e.target.value
                                            )
                                        }
                                        required
                                    />

                                    <InputError
                                        message={errors.project_name}
                                        className="mt-2"
                                    />
                                </div>
                                <div>
                                    <InputLabel
                                        htmlFor="project_description"
                                        value="project Description"
                                    />

                                    <TextInput
                                        id="project_description"
                                        name="project_description"
                                        value={data.project_description}
                                        className="mt-1 block w-full"
                                        autoComplete="project_description"
                                        isFocused={true}
                                        onChange={(e) =>
                                            setData(
                                                "project_description",
                                                e.target.value
                                            )
                                        }
                                        required
                                    />

                                    <InputError
                                        message={errors.project_description}
                                        className="mt-2"
                                    />
                                </div>
                                <div>
                                    <InputLabel
                                        htmlFor="project_color"
                                        value="project Color"
                                    />

                                    <ColorInput
                                        id="project_color"
                                        name="project_color"
                                        value={data.project_color}
                                        className="mt-1 block w-full"
                                        autoComplete="project_color"
                                        isFocused={true}
                                        onChange={(e) =>
                                            setData(
                                                "project_color",
                                                e.target.value
                                            )
                                        }
                                        required
                                    />

                                    <InputError
                                        message={errors.project_color}
                                        className="mt-2"
                                    />
                                </div>
                                <div className="mt-4 flex items-center justify-end">
                                    <PrimaryButton
                                        className="ms-4"
                                        disabled={processing}
                                    >
                                        Register
                                    </PrimaryButton>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
