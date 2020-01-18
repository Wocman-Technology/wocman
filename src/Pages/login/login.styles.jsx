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
    .container {
        margin-top: 15rem;
        div:nth-child(1) {
            div:nth-child(1) {
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
    }
    }
`;

export const SignUpButton = styled(CustomButton)`
    width: 300px;
`

export const FormWrapper = styled.div`
    width: 80%;
    height: 80%;
    margin: auto;
`