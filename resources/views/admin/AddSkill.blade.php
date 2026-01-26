<x-components.admin>
    

    <div class="max-w-5xl mx-auto px-6 py-10">

        <!-- Page Header -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-white">Manage Skills</h2>
        </div>

        <!-- Add Skill -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 mb-10">
            <h3 class="text-lg font-semibold text-white mb-4">
                Add New Skill
            </h3>

            <form class="flex gap-4" method="POST" action="{{ route('AddSkill')}}">
                @csrf
                <input
                    type="text" id="skill_name" name="skill_name"
                    placeholder="Skill name (ex: Laravel, React...)"
                    class="flex-1 px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                >

                <button
                    type="submit"
                    class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                    Add
                </button>
            </form>
        </div>

        <!-- Existing Skills Table -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6">
            <h3 class="text-lg font-semibold text-white mb-6">
                Existing Skills
            </h3>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-800 text-gray-400 text-sm">
                            <th class="py-3 px-4 text-lg">Skill Name</th>
                            <th class="py-3 px-4 text-right text-lg">Action</th>
                        </tr>
                    </thead>
                    @foreach($skills as $skill)
                    <tbody class="text-gray-300">
                        <!-- Row -->
                        <tr class="border-b border-gray-800">
                            <td class="py-3 px-4">{{ $skill->skill_name }}</td>
                            <td class="py-3 px-4 text-right">
                                <button
                                    type="button"
                                    class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        
                        
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
</x-components.admin>
