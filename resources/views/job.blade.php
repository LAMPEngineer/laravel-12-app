<x-layout>

    <x-slot:title>Jobs Page</x-slot:title>
    <x-slot:heading>Jobs</x-slot:heading>

    <h1> Job</h1>

    <h2 class="font-black text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary']}} per year.
    </p>
  
</x-layout>