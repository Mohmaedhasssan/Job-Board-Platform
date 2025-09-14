<x-layout>
    <x-page-heading>Post a new Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Example: Senior Laravel Developer"/>
        <x-forms.input label="Salary" name="salary" placeholder="Example: 50000 - 70000"/>
        <x-forms.input label="Location" name="location" placeholder="Example: Remote, Boston MA, etc"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Full-time</option>
            <option>Part-time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="Example: https://www.example.com/job-posting"/>
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured"/>
        <x-forms.divider/>
        <x-forms.input label="Tags (Comma Separated)" name="tags"
                       placeholder="Example: Laravel, Backend, Postgres, etc"/>

        <x-forms.button>Publish Job</x-forms.button>
    </x-forms.form>
</x-layout>
