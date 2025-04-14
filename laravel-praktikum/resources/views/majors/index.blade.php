<x-default-layout title="Major" section_title="Majors">
    <div class="flex">
        <a href="{{ route('majors.create') }}"
            class="bg-green-50 text-green-500 border border-green-500 px-3 py-2 flex items-center gap-2">
            <i class="ph ph-plus block text-green-500"></i>
            <div>Add Major</div>
        </a>
    </div>

    <div class="col-span-3 sm:col-span-2 overflow-x-auto">
        <table class="min-w-full bg-white shadow">
            <thead>
                <tr class="border-b border-zinc-200 text-sm leading-normal">
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Majors</th>
                    <th class="py-3 px-6 text-center">Total Students</th>
                    <th class="py-3 px-6 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-zinc-700 text-sm font-light">
                    <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                        <td class="py-3 px-6 text-left">1</td>
                        <td class="py-3 px-6 text-left">Teknik Informatika</td>
                        <td class="py-3 px-6 text-center">153</td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('majors.detail', 1) }}"
                                class="bg-blue-50 border border-blue-500 p-2 inline-block">
                                <i class="ph ph-eye block text-blue-500"></i>
                            </a>
                            <a href="{{ route('majors.update', 1) }}"
                                class="bg-yellow-50 border border-yellow-500 p-2 inline-block">
                                <i class="ph ph-note-pencil block text-yellow-500"></i>
                            </a>
                            <button class="bg-red-50 border border-red-500 p-2">
                                <i class="ph ph-trash-simple block text-red-500"></i>
                            </button>
                        </td>
                    </tr>
                    {{-- <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                        <td class="py-3 px-6 text-left">2</td>
                        <td class="py-3 px-6 text-left">Sistem Informasi Informatika</td>
                        <td class="py-3 px-6 text-center">124</td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('majors.detail', 1) }}"
                                class="bg-blue-50 border border-blue-500 p-2 inline-block">
                                <i class="ph ph-eye block text-blue-500"></i>
                            </a>
                            <a href="{{ route('majors.update', 1) }}"
                                class="bg-yellow-50 border border-yellow-500 p-2 inline-block">
                                <i class="ph ph-note-pencil block text-yellow-500"></i>
                            </a>
                            <button class="bg-red-50 border border-red-500 p-2">
                                <i class="ph ph-trash-simple block text-red-500"></i>
                            </button>
                        </td>
                    </tr> --}}
            </tbody>
        </table>
    </div>
</x-default-layout>