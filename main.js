var $ = jQuery.noConflict();

class Base {
    constructor(){
        this.getHeaderElement();
        this.getQuestionElement();
        this.bargerMenu();
        this.showAnswer();
    }
    getHeaderElement(){
        this.header = $('.header');
        this.headerContens = this.header.find('.header__contents');
        this.barger = this.header.find('.header__barger');
    }
    getQuestionElement(){
        this.question = $('.question');
        this.questionList = this.question.find('.question__list--item');
    }
}

class Event extends Base {
    bargerMenu(){
        const self = this;
        this.barger.on('click', () => {
            self.header.toggleClass('active')
        })
    }
    showAnswer(){
        this.questionList.on('click',function(){
            $(this).next().slideToggle();
            $(this).toggleClass('active')
        })
    }
}

new Event();