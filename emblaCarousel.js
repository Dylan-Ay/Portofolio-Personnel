window.addEventListener('DOMContentLoaded', () => {
  const emblaNode = document.querySelector('.embla')
  const viewportNode = emblaNode.querySelector('.embla__viewport')

  const prevBtn = emblaNode.querySelector('.embla__button--prev')
  const nextBtn = emblaNode.querySelector('.embla__button--next')
  const dotsNode = emblaNode.querySelector('.embla__dots')

  const emblaApi = EmblaCarousel(viewportNode, { loop: false })

  const toggleButtons = () => {
    if (emblaApi.canScrollPrev()) {
      prevBtn.classList.remove('embla__button--disabled')
    } else {
      prevBtn.classList.add('embla__button--disabled')
    }

    if (emblaApi.canScrollNext()) {
      nextBtn.classList.remove('embla__button--disabled')
    } else {
      nextBtn.classList.add('embla__button--disabled')
    }
  }

  prevBtn.addEventListener('click', () => emblaApi.scrollPrev())
  nextBtn.addEventListener('click', () => emblaApi.scrollNext())

  emblaApi.on('init', toggleButtons)
  emblaApi.on('select', toggleButtons)

  let dots = []

  const createDots = () => {
    dotsNode.innerHTML = emblaApi
      .scrollSnapList()
      .map(() => '<button class="embla__dot" type="button"></button>')
      .join('')

    dots = Array.from(dotsNode.querySelectorAll('.embla__dot'))

    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => emblaApi.scrollTo(index))
    })
  }

  const updateDots = () => {
    const selectedIndex = emblaApi.selectedScrollSnap()

    dots.forEach((dot, index) => {
      dot.classList.toggle('embla__dot--selected', index === selectedIndex)
    })
  }

  emblaApi.on('init', createDots)
  emblaApi.on('init', updateDots)
  emblaApi.on('select', updateDots)

  createDots()
  toggleButtons()
})