import React from 'react';
import {MDBBtn} from 'mdbreact'

import {GardenerWrapper, ButtonWrapper} from './gardener.styles';


export const Gardener = () => (
    <GardenerWrapper>
        <div>
            <h2>"Find experienced gardeners from your location and save up on extra charges with wocman"</h2>
            <ButtonWrapper>
                <MDBBtn>Get Wocman</MDBBtn>
                <MDBBtn>Become Wocman</MDBBtn>
            </ButtonWrapper>
        </div>
    </GardenerWrapper>
    )