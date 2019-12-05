import styled from 'styled-components';
import {CustomButton} from '../../custom-button/custom-button.component'

export const FormWrapper = styled.div`
    width: 80%;
    position: absolute;
    display: grid;
    grid-template-columns: repeat(3, 32%);
    grid-gap: 0;
    padding: 20px 35px;
    justify-content: space-evenly;
    background: #FFFFFF !important;
    align-content: center;
    padding: 30px 0 0 10px;
    left: calc(100% - 88vw);
    top: calc(100% - 10vh);
    margin: 0 0 5rem 0;
    color: #552D1E !important;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 0px 10px 10px 10px;

    @media (max-width: 900px) {
        display: none;
    }

`

export const JoinButton = styled(CustomButton)`
        width: 50%; 
        margin: 0 auto;
        font-size: 0.9rem;
`