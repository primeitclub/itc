<div class="flex p-12 items-center justify-center gap-4">
    <h1 class="text-primary text-sm lg:text-3xl font-bold">Year:</h1>
    <div class="dropdown-menu">
        <select wire:model="year" wire:ignore name="year" id="year" class="">
            <option value="" selected disabled>2023</option>
            @foreach(range(2023, date('Y')) as $yearOption)
                <option value="{{ $yearOption }}" class="rounded-md">{{ $yearOption }}</option>
            @endforeach
        </select>
    </div>
    <h1 class="text-primary text-sm lg:text-3xl font-bold">Month:</h1>
    <div class="dropdown-menu">
        <select wire:model="month" wire:ignore name="month" id="month">
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
    </div>
</div>
