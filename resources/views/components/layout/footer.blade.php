{{-- <div class="flex flex-col items-center justify-center lg:h-screen">

<div class="mx-auto max-w-[540px] sm:max-w-[604px] md:max-w-[720px] lg:max-w-[972px] xl:max-w-full xl:px-12 2xl:max-w-[1400px]"> --}}

<!-- Footer -->
<footer class="bg-neutral-100 text-center text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200">

    <!-- Main container -->
    <div class="mx-6 pt-8 pb-4 text-center">
  
    <!-- Links -->
    <div class="grid grid-cols-1 md:grid-cols-3 mb-4">
    <!-- First column -->
    <div class="mb-6">
      <h5 class="mb-2.5 font-bold text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
        {{ \Statamic\Facades\GlobalSet::findByHandle('site_instellingen')->inCurrentSite()['officiele_naam'] }}
      </h5>
  
      <ul class="mb-0 list-none">
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Lost Worlds
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Unknown Journeys
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Hidden Treasures
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Enchanted Realms
          </a>
        </li>
      </ul>
    </div>
  
    <!-- Second column -->
    <div class="mb-6">
      <h5 class="mb-2.5 font-bold text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
        Challenges
      </h5>
  
      <ul class="mb-0 list-none">
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Conquer Mountains
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Oceanic Odyssey
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Space Quest
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Desert Expeditions
          </a>
        </li>
      </ul>
    </div>
  
    <!-- Third column -->
    <div class="mb-6">
      <h5 class="mb-2.5 font-bold text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
        Get Started
      </h5>
  
      <ul class="mb-0 list-none">
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Join Us
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Calendar
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Contact
          </a>
        </li>
        <li>
          <a href="#!" class="text-neutral-600 hover:text-neutral-800 dark:text-neutral-200">
            Blog
          </a>
        </li>
      </ul>
    </div>
  </div>
  
    </div>
  
    <!-- Copyright -->
    <div class="bg-neutral-200 p-6 text-center dark:bg-neutral-700 flex justify-center items-center">
  
        <span>© 2024 Copyright: </span>
  
        <!-- Logo -->
        <a class="mx-3" href="#">
          <img src="{{ Vite::asset('resources/images/rv-logo.svg') }}"
            class="h-5"
            alt="RV Logo"
            loading="lazy"
          />
        </a>
  
        <a
          class="font-semibold text-neutral-600 dark:text-neutral-400"
          href="https://www.rv-waarloos.be/"
        >
        {{ \Statamic\Facades\GlobalSet::findByHandle('site_instellingen')->inCurrentSite()['officiele_naam'] }}
        </a>
  
    </div>
  
  
  </footer>

{{-- </div>
</div> --}}