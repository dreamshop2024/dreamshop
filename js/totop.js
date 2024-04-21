const btnUp = {
    el: document.querySelector('.gotop'),
    show() {
      this.el.classList.remove('gotopshow');
    },
    hide() {
      this.el.classList.add('gotopshow');
    },
    addEventListener() {
      window.addEventListener('scroll', () => {
        const scrollY = window.scrollY || document.documentElement.scrollTop;
        scrollY > 500 ? this.show() : this.hide();
      });
      document.querySelector('.gotop').onclick = () => {
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
      }
    }
  }
  btnUp.addEventListener();