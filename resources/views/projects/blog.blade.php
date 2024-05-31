<x-app-layout>
    <div class="max-w-screen-xl mx-auto px-5 mb-20">
        <div class="mx-auto max-w-3xl text-center mt-14"> 
            <span class="text-purple-600 dark:text-purple-400 uppercase tracking-wider text-sm font-medium"> 
                Technology 
            </span>
            <h1 class="text-3xl lg:text-4xl font-bold lg:tracking-tight mt-1 lg:leading-tight dark:text-white">
                Typography Example Post
            </h1>
            <div class="flex gap-2 mt-3 items-center justify-center text-sm flex-wrap md:flex-nowrap"> 
                    <span class="text-slate-600 dark:text-slate-300"> Charles North </span> 
                    <span class="text-slate-600 dark:text-slate-300">•</span> 
                    <time class="text-slate-600 dark:text-slate-300" datetime="2022-08-05T15:36:00.000Z"> Fri Aug 05 2022 </time> 
                    <span class="text-slate-600 dark:text-slate-300 hidden md:block">•</span>
                    <div class="w-full md:w-auto flex flex-wrap justify-center gap-3"> 
                    <span class="text-sm text-slate-500 dark:text-slate-400">#mdx</span>
                    <span class="text-sm text-slate-500 dark:text-slate-400">#astro</span>
                    <span class="text-sm text-slate-500 dark:text-slate-400">#blog</span>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-4xl">
            <picture>
                <img src="{{ asset('img/blog/1.jpeg') }}" alt="Feature image" class="h-full w-full object-contain rounded-xl mt-6" data-astro-transition-scope="astro-xmqcjxod-1" width="1280" height="800" loading="lazy" decoding="async">
            </picture>
        </div>
        <div class="mx-auto prose mt-6 max-w-3xl prose-headings:mb-2 prose-headings:mt-8 dark:prose-invert">
            
        </div>
        <div class="text-center mt-12"> 
            <a href="/blog" class="rounded-full text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-purple-500 focus-visible:outline-none focus-visible:shadow-outline-purple px-6 py-2.5 bg-white border-2 border-purple-500 hover:bg-purple-50 text-purple-600  gap-1 items-center justify-center transition duration-300 ease-out">Back to Blog</a> 
        </div>


    </div>
</x-app-layout>