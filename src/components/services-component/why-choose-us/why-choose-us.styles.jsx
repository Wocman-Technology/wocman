import styled from 'styled-components';

export const WhyChooseUsWrapper = styled.section`

    display: grid;
    grid-template-columns: repeat(3, 362px);
    justify-content: center;
    padding: 0 4rem;

    @media (min-width: 768px) and (max-width: 1100px) {
    grid-template-columns: repeat(2, 362px);
    margin: 0 auto;
  }

    @media (max-width: 768px){
        grid-template-columns: 1fr;
        margin: 0 auto;
        max-width: 80%;
        padding: 0;
    }
`