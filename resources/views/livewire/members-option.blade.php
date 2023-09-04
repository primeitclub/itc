<div class="flex p-12 justify-end gap-4">
    <h1 class="text-primary text-sm lg:text-3xl font-bold">Year:</h1>
    <div class="dropdown-menu">
        <select wire:model="year" name="year" id="year" class="rounded-md">           
            <option value="" selected disabled>Select a year</option>
            @foreach (range(2022, date('Y')) as $yearOption)
                <option value="{{ $yearOption }}">{{ $yearOption }}</option>
            @endforeach
        </select>
    </div>
</div>