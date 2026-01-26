<x-components.layout>
    <x-home-sidebar/>

    <div class="max-w-4xl mx-auto px-6 py-10">

        <!-- Page Header -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-white">Add New Job</h2>
            <p class="text-gray-400 mt-1">
                Create a new job opportunity for candidates.
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-lg">

            <form action="{{route('AddJob')}}" method="POST">
                @csrf

                <!-- Job Title -->
                <div class="mb-6">
                    <label class="block text-gray-300 mb-2">Job Title</label>
                    <input
                        type="text"
                        name="title"
                        placeholder="e.g. Backend Laravel Developer"
                        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    >
                </div>

                <!-- Company Name -->
                <div class="mb-6">
                    <label class="block text-gray-300 mb-2">Company Name</label>
                    <input
                        type="text"
                        name="company_name"
                        placeholder="Company or Organization"
                        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg"
                    >
                </div>

                <!-- Location & Type -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

                    <div>
                        <label class="block text-gray-300 mb-2">Location</label>
                        <input
                            type="text"
                            name="location"
                            placeholder="Remote / City / Country"
                            class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg"
                        >
                    </div>

                    <div>
                        <label class="block text-gray-300 mb-2">Job Type</label>
                        <select
                            name="job_type"
                            class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg"
                        >
                            <option value="">Select type</option>
                            <option value="full_time">Full Time</option>
                            <option value="part_time">Part Time</option>
                            <option value="contract">Contract</option>
                            <option value="internship">Internship</option>
                        </select>
                    </div>

                </div>

                <!-- Salary -->
                <div class="mb-6">
                    <label class="block text-gray-300 mb-2">Salary (optional)</label>
                    <input
                        type="text"
                        name="salary"
                        placeholder="e.g. $1000 - $2000"
                        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg"
                    >
                </div>

                <!-- Job Description -->
                <div class="mb-6">
                    <label class="block text-gray-300 mb-2">Job Description</label>
                    <textarea
                        name="description"
                        rows="6"
                        placeholder="Describe the job responsibilities and requirements..."
                        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    ></textarea>
                </div>

                <!-- Required Skills -->
                <div class="mb-8">
                    <label class="block text-gray-300 mb-2">Required Skills</label>
                    <input
                        type="text"
                        name="skills"
                        placeholder="e.g. Laravel, PHP, MySQL"
                        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                        >
                    <p class="text-gray-500 text-sm mt-1">
                        Hold CTRL / CMD to select multiple skills
                    </p>
                </div>

                <!-- Actions -->
                <div class="flex justify-end gap-4">
                    <a href="{{route('EmployeeHome')}}"
                       class="px-6 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition">
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                        Publish Job
                    </button>
                </div>

            </form>

        </div>
    </div>

</x-components.layout>
