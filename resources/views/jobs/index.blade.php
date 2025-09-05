<x-layout>
    <div @class(['space-y-10'])>
        <section class="text-center space-y-10">
            <h1 class="text-4xl font-bold mt-6">Let's Find Your Next Job</h1>
            <form action="#" method="post">
                <input type="text" placeholder="Web Developer....."
                       class=" bg-white/10 rounded-xl px-5 py-3 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Feature Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach($jobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>

        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class=" flex flex-wrap gap-3 mt-6 max-w-5xl">
                @foreach($tags as $tag)
                    <x-tag size="base" :$tag/>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class=" space-y-3">
                @foreach($jobs as $job)

                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
