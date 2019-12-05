import React from 'react';

import {FormWrapper, FormOuterWrapper, JoinButton} from './header-form.styles';
import {FormInput} from '../../form-input/form-input.component';
import {CustomButton} from '../../custom-button/custom-button.component';



export const HeaderForm = () => (
    <FormOuterWrapper>
    <div class="header-button">
    <CustomButton inverted>customer</CustomButton>
    <CustomButton>wocman</CustomButton>
    </div>
    <FormWrapper>
    <FormInput placeholder="Full Name"/>
    <FormInput placeholder="Phone Number"/>
    <FormInput placeholder="Email"/>
    <FormInput placeholder="Location"/>
    <FormInput placeholder="SkillSet"/>
    <JoinButton>Join</JoinButton>
    </FormWrapper>
   </FormOuterWrapper>
)