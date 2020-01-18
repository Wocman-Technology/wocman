import styled from "styled-components";
import AuthImage from "../../assets/bg-image.jpg";
import { CustomButton } from "../../components/custom-button/custom-button.component";

export const Loginwrapper = styled.body`
    height: 100vh;
    width: auto;
    background-image: url(${AuthImage});
    background-position: center;
    object-fit: contain;
    background-repeat: no-repeat;
    background-size: cover;
    .img__div {
        position: absolute;
        margin: 2rem;
        cursor: pointer;
    }
    .custom-container {
        display: flex;
        padding: 4rem 5rem;
        margin: 15rem auto 0;
        div:nth-child(1) {
            width: 50%;
        h2 {
            font-style: normal;
            font-weight: bold;
            font-size: 36px;
            line-height: 48px;
        }
        small {
            font-style: normal;
            font-weight: normal;
            font-size: 17px;
            line-height: 31px;
        }
            }
        div:nth-child(2){
            width: 50%;
            padding: 3rem 1rem;
            align-items: center;
            background: #FFFFFF;
            border-radius: 10px;
            div {
                display: block;
                margin: 0 auto;
                & > * {
                    margin-top: 1rem;
                    display: block;
                }
                small {
                    font-size: 0.9rem;
                }
                .google {
                    display: flex;
                    width: 100%;
                    &:hover {
                        div, button {
                        background: #FFF;
                        color: #552d1e;
                        }
                    }
                    div {
                        display: inline-block;
                        color: #FFF;
                        background: #552d1e;
                        border-right: none;
                        padding-right: 0;
                        height: 48px;
                        width: 25%;
                        margin-top: 1.1rem;
                        i {
                            display: inline-block;
                            margin-top: 1.2rem;
                        }
                    }
                }
            }
        }
    }
`;

export const SignUpButton = styled(CustomButton)`
    margin: 0 auto;
    display: inline-block;
    border-left: none;
    width: 75%;
    word-spacing: 1px;
    letter-spacing: 1.5px;
    padding-left: 0;
    padding-right: 0;
    font-size: 10px;
    text-transform: uppercase;
    font-weight: bolder;
`

export const FormWrapper = styled.div`
    height: 80%;
    margin: auto;
    text-align: center;
`