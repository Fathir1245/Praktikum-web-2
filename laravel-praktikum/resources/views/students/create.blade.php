<x-default-layout title="Student" section_title="Add new student">
    <div class="grid grid-cols-7">
        <form action="{{ route('students.store') }}" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3 md:col-span-2">
            @csrf
            @method('POST')
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col gap-2">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="Student Name" />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="student_id_number">Student ID Number</label>
                    <input type="text" name="student_id_number"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="Student ID (e.g., F55122001)" />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="student@example.com" />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" class="px-3 py-2 border border-zinc-300 bg-slate-50"
                        placeholder="e.g., 081234567890" />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="birth_date">Birth Date</label>
                    <input type="date" name="birth_date"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50" />
                </div>

                <div class="flex flex-col gap-2">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="major_id">Select Majors</label>
                    <select name="major_id" id="major_id" class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                        <option value="" disabled selected>Select Majors</option>
                        <option value="1">S1 Teknik Informatika</option>
                        <option value="2">S1 Sistem Informasi</option>
                    </select>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="status">Student Status</label>
                    <select name="status" id="status" class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                        <option value="" disabled selected>Select Status</option>
                        <option value="active">Active</option>
                        <option value="drop-out">Dropped Out</option>
                        <option value="graduated">Graduated</option>
                    </select>
                </div>
            </div>

            <div class="mt-6 flex gap-2">
                <a href="{{ route('students.index') }}"
                    class="bg-slate-50 px-3 py-2 border border-slate-500 text-slate-500 text-sm cursor-pointer">
                    <span>Cancel</span>
                </a>
                <button type="submit"
                    class="bg-blue-500 border border-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer text-white">
                    <i class="ph ph-floppy-disk block text-base"></i>
                    <span>Save</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>
