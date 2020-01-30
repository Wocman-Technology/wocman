import styled from "styled-components";
import SelectIcon from '../../assets/select-icon.svg'

export const Container = styled.div`
    height: 60vh;
    max-width: 70%;
    margin: 0 auto;

    & div:first-child {
        background: #552D1E;
        border-radius: 4px 4px 0px 0px;
        padding: 1.5rem 7.5rem;

        p, small {
        color: #FFFFFF;
        }
    }

    & div:nth-child(2) {
        margin: 2rem 0;
        p {
            color: #000000;
            font-weight: bold;
        }
        div > select {
        background: #FFFFFF;
        box-shadow: 0px 4px 26px rgba(0, 0, 0, 0.1);
        border: none;
        width: 30rem;
        outline: none;
        cursor: pointer;
        height: 3rem;
        padding: 0 2rem;
        background-image: url(${SelectIcon});
        background-repeat: no-repeat, repeat;
        background-position: right 2em top 50%, 0 0;
        background-size: .65em auto, 100%;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        &::-ms-expand {
            display: none;
        }
        &:active {
            animation: flip 3s linear 0.5s forwards;
        }
        @keyframes flip {
            from {transform: rotate(0deg)}
            to {transform: rotate(90deg)}
        } 
        }
    }
`