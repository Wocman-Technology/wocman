import React from 'react';
import {InputWrapper} from './form-input.styles'

export const FormInput = ({placeholder}) => (

    <InputWrapper>
        <input type="text" placeholder={placeholder}/>
    </InputWrapper>
)