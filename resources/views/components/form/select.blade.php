@props(['name'])

<select name="department_id" id="department_id" class="border border-gray-200 p-2 w-full rounded">
    <option selected disabled>Select a Department</option>
    {{ $slot }}

</select>

