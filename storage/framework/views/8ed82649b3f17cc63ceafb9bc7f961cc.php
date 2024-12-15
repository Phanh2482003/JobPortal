<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['id', 'name', 'value' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['id', 'name', 'value' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<input
    type="hidden"
    name="<?php echo e($name); ?>"
    id="<?php echo e($id); ?>_input"
    value="<?php echo e($value); ?>" />

<div class="border border-gray-300 focus-within:ring-2 focus-within:border-[#3db87a] focus-within:ring-[#99ddbb] rounded-md text-sm">
    <trix-toolbar
        class="[&_.trix-button]:bg-none [&_.trix-button.trix-active]:bg-gray-300"
        id="<?php echo e($id); ?>_toolbar"></trix-toolbar>

    <trix-editor
        id="<?php echo e($id); ?>"
        toolbar="<?php echo e($id); ?>_toolbar"
        input="<?php echo e($id); ?>_input"
        <?php echo e($attributes->merge(['class' => 'trix-content border-0'])); ?>></trix-editor>
</div><?php /**PATH C:\Users\Admin\Music\Downloads\JobPortal-main\resources\views/components/trix-input.blade.php ENDPATH**/ ?>