window.Select = {
    data (options) {
        return {
            onInit () {
                var select = new SlimSelect({
                    placeholder: this.placeholder,
                    select: this.$refs[this.model]
                });
                this.$refs[this.model].addEventListener('change', e => {
                    this.$wire.set(this.model, select.selected());
                });
            },
            placeholder: 'Select',
            ...options
        }
    }
}