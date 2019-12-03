import React from 'react';

import {FormWrapper, JoinButton} from './header-form.styles';
import {FormInput} from '../form-input/form-input.component';



export const HeaderForm = () => (
    <FormWrapper>
    <FormInput placeholder="Full Name"/>
    <FormInput placeholder="Phone Number"/>
    <FormInput placeholder="Email"/>
    <FormInput placeholder="Location"/>
    <FormInput placeholder="SkillSet"/>
    <JoinButton inverted>Join</JoinButton>
    </FormWrapper>
)