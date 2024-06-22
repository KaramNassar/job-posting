<header id="page-header"
        class="z-1 flex flex-none items-center bg-white shadow-sm dark:bg-gray-800 sticky top-0 z-[1000]">

	<div class="container mx-auto px-4 lg:px-8 xl:max-w-7xl">
		<div class="flex justify-between py-4">

			<div class="flex items-center">
				<a href="{{ route('jobs.index') }}"
				   class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300">
					<x-logo/>

					<span>Career Spring</span>
				</a>
			</div>

			<div class="flex items-center gap-2 lg:gap-5">
				<x-navbar/>
				@auth
					<div class="relative inline-block">

						<!-- Dropdown Toggle Button -->
						<button
								x-on:click="userDropdownOpen = true"
								x-bind:aria-expanded="userDropdownOpen"
								type="button"
								id="tk-dropdown-layouts-user"
								class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
								aria-haspopup="true"
						>
							<span>{{ auth()->user()->name }}</span>
							<svg
									class="hi-mini hi-chevron-down inline-block size-5 opacity-40"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 20 20"
									fill="currentColor"
									aria-hidden="true"
							>
								<path
										fill-rule="evenodd"
										d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
										clip-rule="evenodd"
								/>
							</svg>
						</button>
						<!-- END Dropdown Toggle Button -->

						<!-- Dropdown -->
						<div
								x-cloak
								x-show="userDropdownOpen"
								x-transition:enter="transition ease-out duration-100"
								x-transition:enter-start="opacity-0 scale-90"
								x-transition:enter-end="opacity-100 scale-100"
								x-transition:leave="transition ease-in duration-75"
								x-transition:leave-start="opacity-100 scale-100"
								x-transition:leave-end="opacity-0 scale-90"
								x-on:click.outside="userDropdownOpen = false"
								role="menu"
								aria-labelledby="tk-dropdown-layouts-user"
								class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-lg shadow-xl dark:shadow-gray-900"
						>
							<div
									class="divide-y divide-gray-100 rounded-lg bg-white ring-1 ring-black/5 dark:divide-gray-700 dark:bg-gray-800 dark:ring-gray-700"
							>
								<div class="space-y-1 p-2.5">
									<a
											role="menuitem"
											href="{{ route('employers.jobs', auth()->user()->employer) }}"
											class="group flex items-center justify-between gap-2 rounded-lg border border-transparent px-2.5 py-2 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-800 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600"
									>
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
										     stroke-width="1.5" stroke="currentColor" class="size-6">
											<path stroke-linecap="round" stroke-linejoin="round"
											      d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z"/>
										</svg>

										<span class="grow">My Jobs</span>
									</a>
								</div>
								<div class="space-y-1 p-2.5">
									<a
											role="menuitem"
											href="{{ route('password.edit') }}"
											class="group flex items-center justify-between gap-2 rounded-lg border border-transparent px-2.5 py-2 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-800 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600"
									>
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
										     stroke-width="1.5" stroke="currentColor" class="size-6">
											<path stroke-linecap="round" stroke-linejoin="round"
											      d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"/>
										</svg>

										<span class="grow">Change Password</span>
									</a>
									<a
											role="menuitem"
											href="{{ route('profile.edit') }}"
											class="group flex items-center justify-between gap-2 rounded-lg border border-transparent px-2.5 py-2 text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-800 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600"
									>
										<svg
												class="hi-mini hi-user-circle inline-block size-5 flex-none opacity-25 group-hover:opacity-50"
												xmlns="http://www.w3.org/2000/svg"
												viewBox="0 0 20 20"
												fill="currentColor"
												aria-hidden="true"
										>
											<path
													fill-rule="evenodd"
													d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
													clip-rule="evenodd"
											/>
										</svg>
										<span class="grow">Account</span>
									</a>
								</div>
								<div class="space-y-1 p-2.5">
									<form action="{{ route('logout') }}" method="POST">
										@csrf
										@method('DELETE')
										<button
												type="submit"
												role="menuitem"
												class="group flex w-full items-center justify-between gap-2 rounded-lg border border-transparent px-2.5 py-2 text-left text-sm font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-800 active:border-blue-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600"
										>
											<svg
													class="hi-mini hi-lock-closed inline-block size-5 flex-none opacity-25 group-hover:opacity-50"
													xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 20 20"
													fill="currentColor"
													aria-hidden="true"
											>
												<path
														fill-rule="evenodd"
														d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
														clip-rule="evenodd"
												/>
											</svg>
											<span class="grow">Sign out</span>
										</button>
									</form>
								</div>
							</div>
						</div>
						<!-- END Dropdown -->


					</div>

				@endauth

				@guest
					<x-nav-link href="{{ route('login-user.create') }}" :active="request()->is('login')">Login
					</x-nav-link>
					<x-nav-link href="{{ route('register-user.create') }}" :active="request()->is('register')">Registe
					</x-nav-link>
				@endguest

				<x-toggle-mobile-menu/>

				<x-dark-light-toggle/>


			</div>
		</div>

		<x-mobile-nav/>

	</div>
</header>