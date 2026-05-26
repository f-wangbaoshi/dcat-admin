<?php

namespace Dcat\Admin\Form\Field;

class Password extends Text
{
    protected $isPasswordVisible = false;

    public function render()
    {
        $this->prepend('<i class="feather icon-eye toggle-password"></i>')
            ->defaultAttribute('type', 'password');

        $this->script = <<<EOT
$('.toggle-password').on('click', function() {
    var input = $(this).closest(".input-group").find('input');
    if ($(this).hasClass('icon-eye')) {
        input.prop('type', 'text');
        $(this).removeClass('icon-eye').addClass('icon-eye-off');
    } else {
        input.prop('type', 'password');
        $(this).removeClass('icon-eye-off').addClass('icon-eye');
    }
});
EOT;

        return parent::render();
    }
}
