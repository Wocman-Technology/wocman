import React from 'react';
import { NavBar } from '../../components/navbar/navbar.component';
import { Footer } from '../../components/footer/footer.component';
import { AccountSetUpWrapper } from './account-setup.styles';

export const AccountSetup = () => {
    return (
        <AccountSetUpWrapper>
            <NavBar/>
            <Footer/>
        </AccountSetUpWrapper>
    )
}
