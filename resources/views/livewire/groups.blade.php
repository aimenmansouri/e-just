<div>
    <label for="admin_type" class="block text-sm font-medium text-gray-700">Location</label>
    <select id="admin_type" name="admin_type" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm rounded-md">
      @foreach ($groups as $groupe)
      <fieldset>
          <div class="relative flex items-start py-4">
            <div class="min-w-0 flex-1 text-sm">
              <label for="person-5" class="font-medium text-gray-700 select-none">year {{ $groupe->year }} group n {{ $groupe->groupe }} speciality {{ $groupe->speciality }}</label>
            </div>
            <div class="ml-3 flex items-center h-5">
              <input id="person-5" name="person-5" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
            </div>
          </div>
        </div>
      </fieldset>
      @endforeach
    </select>
  </div>
