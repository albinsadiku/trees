<form role="Search" class="w-full" method="get" action="<?php echo home_url('/'); ?>">
    <div class="flex justify-center align-center pr-0 lg:pr-32 ">
        <img class="hidden lg:block pl-24" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAECUlEQVR4nO2aT6gVVRzHv+c9ezwThVS0MuklqAsJS7CICCLfy6hVhIUQFIIVbdqkQaE7pcSKynYtzBKSFj4otFUUVC4zDXGT/zZxJV9JYjzN92lx7sDc6/w958w9VvOBgZl755zf9/ubmfNvRmppaWlpCQPwUGwN0QCeBa4Aa2NrGTjAHcAUlhPA7NiaBgYwBHxNL+/F1jUwgNe4nhng8djaGge4F5jOSABAB1gUW2NjAKPAsRzzCQdj62wM4P0S8wmbYmsNDjDRfc6rcAlYHltzMIBbgHMVzSd8DwzH1h4E4EBN8wnbYmv3BtjkaB7gKnB/bA/9zKp5/glJE939lyU9WaHMh5Imu/uXasa7cQFer3jln4mtNTjAauByxQR0gCWxNQcD2wv8UvP5PwKMxNbuDWCAgzXNJ7wdW783wBuO5sEOnJ4KqGUesAy4C5gbqt6igOPA3x4JALiI46gQO+1+DNgHnM2o+wzwMbAeGAptfilw3tN8wk/AzTXjT1A+8UpzFFgXyvwIthELyd6KsWcB71B93pFmBtiN7xAc2BPQeJrNJXGHgU8DxDkA1B3wFQobAnbUFPERNa8E8G4A8wm78uK4NBZIWlazzJ21AsB6Sa/UjFHEq8AjQWoCtjtehT0V6x8Gjoe69Cl+xLd3ADbi1iAlbKkQ44kgdrMZ9zE/jn3x4cM1SiZHwGfeNvOp1PtkiVoF/B5IxDQFzyPwa6A4WZzqj2cqmF8i6YikpU7Zy2ZK0oPGmJN9sRZJ6gSMk8U8Y8yfyUFho4AdY3+psOYlab6kw8Ctfb8P4j3CgvRBbgKAmyR9LumehoSMSfoCmNNQ/ZUougO2Slou6VRquxwg5lSqvvmSdqb++y1A/WVcSB+UtgFpgJWSTpaemM9ZSSuMMVdy6jeSzkta6BGjiNPGmJ5BXN2BwX2eAhbL3vqZGGOQ9J1njCK+dS4JrMDO5305RsH3A8DTAWLk4TYQAuYAPwcU8kFBrBHqrzlWwX0oDHzSgKDcdwrAhpKy09gkpbc/Cs6fwXUyBLwYwm0GU0DuLBHYW1D2uo8vsGuDeex2Nb8G+Cug6X5+wI43smKPAl/llBsD5gIvdLfbu2Wy2I/LqhBu6/8uvFmgYZTsx2+suyU8nJGAGWAXjuYNMNmE2wyuYRdAivRsBE6nypQl4CieU9+tjdvupQPcVqJpBPst4iT2s7ysBOzHrie4L3wAD+A/73fhG2rcrmQkwIWe1VJsg/SSfEZMfjwq6fAgA/YkwBhzVdJzgxQQm2Dr5di++e7UT4eMMcdD1d8U4V4YSBskPZ867ki64RMQ9iXiv5A2AbEFxKZNQGwBsfnfJyBkN3hIvS81mu4CL0p6q7t/ruFYLS0tLf9N/gE+Ojtw6nQSygAAAABJRU5ErkJggg==" />

        <div class="hidden lg:block w-1/2 flex flex-col text-left pl-8">
            <h1 class="text-3xl text-white font-bold ">Kerko një pyll...</h1>
            <p class="text-[#F9F871] capitalize font-bold text-sm after:content-['→'] mt-2"><a href="<?php echo 'http://localhost/wpadvanced/blog/' ?>" class="w-max">Shiko te gjitha pyjet </a></p>
        </div>

        <div class="relative w-full lg:w-3/4 flex align-center items-center">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="search" class=" outline-0 text-black block h-max p-4 pl-10 w-full text-sm rounded-lg border dark:placeholder-gray-400" autocomplete="off" placeholder="Kërko një qytet, kod postar ose emër pylli" value="" required name="s" title="Search" autocomplete="off" />
            <button type="submit" class="text-black font-bold absolute right-2.5 bottom-2.5 bg-[#F9F871]  focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 ">Kerko</button>

        </div>
    </div>
</form>