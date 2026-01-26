<x-components.layout>
    <x-home-sidebar/>

    <div class="max-w-4xl mx-auto px-6 py-10">

        <!-- Header -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-white">Add Experience</h2>
            <p class="text-gray-400 text-sm mt-1">
                Add your work or professional experience
            </p>
        </div>

        <!-- Form -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-lg">

            <form action="{{ route('AddExperience', Auth::user()) }}" method="POST">
                @csrf

                <!-- Job Title -->
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Job Title
                    </label>
                    <input
                        type="text"
                        id="title"
                        name="title"
                        placeholder="e.g. Web Developer"
                        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>

                <!-- Company -->
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Company
                    </label>
                    <input
                        type="text"
                        id="company"
                        name="company"
                        placeholder="e.g. ABC Company"
                        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>

                <!-- Dates -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            Start Date
                        </label>
                        <input
                            type="date"
                            id="start_date"
                            name="start_date"
                            class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">
                            End Date
                        </label>
                        <input
                            type="date"
                            id="end_date"
                            name="end_date"
                            class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Description
                    </label>
                    <textarea
                        name="description"
                        id="description"
                        rows="4"
                        placeholder="Describe what you did in this role..."
                        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>
                </div>

                <!-- Actions -->
                <div class="flex justify-end gap-3">
                    <a href="{{route('profilePage', Auth::user())}}"
                       class="px-5 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition">
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                        Save Experience
                    </button>
                </div>

            </form>

        </div>

    </div>
</x-components.layout>
