<x-default-layout title="Major" section_title="Add new major">
    <div class="grid grid-cols-7">
        <form action="" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-100 shadow col-span-3 md:col-span-2">
            @csrf
            @method("POST")

            <div class="flex flex-col gap-2">
                <label for="name">Major Name</label>
                <input type="text" id="name" name="name"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="e.g., Teknik Informatika">
            </div>

            <div class="flex flex-col gap-2">
                <label for="code">Major Code</label>
                <input type="text" id="code" name="code"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="e.g., TIF">
            </div>

            <div class="flex flex-col gap-2">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50"
                    placeholder="Describe the major..."></textarea>
            </div>

            <div class="flex flex-col gap-2">
                <label for="total_students">Total Students</label>
                <input type="number" id="total_students" name="total_students"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="e.g., 120">
            </div>

            <div class="self-end flex gap-2">
                <a href="#" class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    Cancel
                </a>
                <button type="submit"
                    class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-floppy-disk block text-blue-500"></i>
                    <span>Save</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>
