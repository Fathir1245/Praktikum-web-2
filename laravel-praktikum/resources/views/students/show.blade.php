<x-default-layout title="Student" section_title="Student detail">
    <div class="grid grid-cols-3">
        <div class="flex flex-col gap-4 px-6 py-4 bg-white border border-l-4 border-zinc-300 shadow col-span-3 md:col-span-2">
            <div class="grid md:grid-cols-2 gap-4">
                
                <div class="flex flex-col gap-2">
                    <div class="text-sm px-3 py-2 border border-zinc-300">Student Name Here</div>
                    <div class="text-sm px-3 py-2 border border-zinc-300">F55122000</div>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="text-sm px-3 py-2 border border-zinc-300">student@example.com</div>
                    <div class="text-sm px-3 py-2 border border-zinc-300">+62-853-4028-3913</div>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="text-sm px-3 py-2 border border-zinc-300">28 September 2003</div>
                    <div class="text-sm px-3 py-2 border border-zinc-300">Male</div>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="text-sm px-3 py-2 border border-zinc-300">S1 Informatics</div>
                    <div class="text-sm px-3 py-2 border border-zinc-300">Active</div>
                </div>
            </div>

            <div class="flex gap-2 mt-4">
                <a href="{{ route('students.index') }}"
                   class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Back</span>
                </a>

                <a href="#" class="bg-yellow-50 border border-yellow-500 text-yellow-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-note-pencil block text-yellow-500"></i>
                    <span>See/Edit</span>
                </a>
            </div>
        </div>
    </div>
</x-default-layout>
