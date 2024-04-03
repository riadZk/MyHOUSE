

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center
 px-4 py-2 bg-customColor border border-transparent rounded-md font-semibold text-xs
 text-white uppercase tracking-widest hover:bg-customColor-hover  active:bg-customColor-active']) }}>
    {{ $slot }}
</button>
