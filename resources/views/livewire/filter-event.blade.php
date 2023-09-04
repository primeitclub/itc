<div class="flex p-12 items-center justify-center gap-4">
    <h1 class="text-primary text-sm lg:text-3xl font-bold">Year:</h1>
    <div class="dropdown-menu">
        <select wire:model="year" name="year" id="year" class="rounded-md">
            <option value="" selected disabled>Select a year</option>
            @foreach (range(2023, date('Y')) as $yearOption)
                <option value="{{ $yearOption }}">{{ $yearOption }}</option>
            @endforeach
        </select>
    </div>
    <h1 class="text-primary text-sm lg:text-3xl font-bold">Month:</h1>
    <div class="dropdown-menu">
        <select wire:model="month" name="month" id="month" class="rounded-md">
            <option value="" selected disabled>Select a month</option>
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
