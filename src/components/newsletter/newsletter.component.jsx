import React from 'react';

import {NewsLetterWrapper} from './newsletter.styles';
import {CustomButton} from '../custom-button/custom-button.component'

export const NewsLetter = () => (

    <NewsLetterWrapper>
            <div>
                <h4>Sign up for our newsletters</h4>
                <p>You can sign up to receive regular updates on our affairs and dealings</p>
            </div>
            <div>
                <input type="text" placeholder="Email address"/>
                <CustomButton>Save Me</CustomButton>
            </div>
    </NewsLetterWrapper>


)